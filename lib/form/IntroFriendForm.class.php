<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * IntroFriend form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class IntroFriendForm extends BaseIntroFriendForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'content' => new sfWidgetFormTextarea()
    ));
    $this->widgetSchema->setLabels(array(
    'content' => '紹介文',
    ));

    $this->widgetSchema->setNameFormat('intro_friend[%s]');
    $this->setValidator( 'content', new sfValidatorString(array('required' => true), array('required' => '紹介文を入力してください')));
    $this->widgetSchema['content']->setAttributes(array('rows' => 8, 'cols' => 88));
  }
}