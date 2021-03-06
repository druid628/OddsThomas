<?php

/**
 * BaseOdds
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $odds_id
 * @property integer $game_id
 * @property string $team1
 * @property string $draw
 * @property string $team2
 * @property boolean $active
 * @property Game $Game
 * 
 * @method integer getOddsId()  Returns the current record's "odds_id" value
 * @method integer getGameId()  Returns the current record's "game_id" value
 * @method string  getTeam1()   Returns the current record's "team1" value
 * @method string  getDraw()    Returns the current record's "draw" value
 * @method string  getTeam2()   Returns the current record's "team2" value
 * @method boolean getActive()  Returns the current record's "active" value
 * @method Game    getGame()    Returns the current record's "Game" value
 * @method Odds    setOddsId()  Sets the current record's "odds_id" value
 * @method Odds    setGameId()  Sets the current record's "game_id" value
 * @method Odds    setTeam1()   Sets the current record's "team1" value
 * @method Odds    setDraw()    Sets the current record's "draw" value
 * @method Odds    setTeam2()   Sets the current record's "team2" value
 * @method Odds    setActive()  Sets the current record's "active" value
 * @method Odds    setGame()    Sets the current record's "Game" value
 * 
 * @package    OddsThomas
 * @subpackage model
 * @author     druid628
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOdds extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('odds');
        $this->hasColumn('odds_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('game_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('team1', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('draw', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('team2', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Game', array(
             'local' => 'game_id',
             'foreign' => 'game_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}