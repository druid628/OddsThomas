<?php

/**
 * Bet form.
 *
 * @package    OddsThomas
 * @subpackage form
 * @author     druid628
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BetForm extends BaseBetForm
{
  public function configure()
  {
	  unset($this['created_at'], $this['updated_at']);
	  $ws = $this->getWidgetSchema();
	  $ws['odds'] = new sfWidgetFormInputHidden();
  }

  public function save(Doctrine_Connection $conn)
  {

	  parent::save($conn)
  }
}
