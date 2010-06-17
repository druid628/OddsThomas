<?php

/**
 * Game form.
 *
 * @package    OddsThomas
 * @subpackage form
 * @author     druid628
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GameForm extends BaseGameForm
{
  public function configure()
  {
	  unset($this['created_at'], $this['updated_at']);
  }
}
