<?php

require_once dirname(__FILE__).'/../lib/betGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/betGeneratorHelper.class.php';

/**
 * bet actions.
 *
 * @package    OddsThomas
 * @subpackage bet
 * @author     druid628
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class betActions extends autoBetActions
{
  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->bet = $this->form->getObject();
    if($request->hasParameter('game_id'))
    {
	$ws = $this->form->getWidgetSchema();
	$ws['game_id'] = new sfWidgetFormInputHidden(array('default'=> $request->getParameter('game_id')));
	$blah = Doctrine_Query::create()
		->select('g.team1, g.team2')
		->from('Game g')
		->where('g.game_id = '. $request->getParameter('game_id'))
		->fetchArray();
	unset($blah[0]['game_id']);
	$choices = array_merge($blah[0], array('draw' => 'Draw'));
	#var_dump($choices);
	#die();


	$ws['pick'] = new sfWidgetFormChoice(array('label' => 'Pick', 'choices' => $choices));
    }
  }
}
