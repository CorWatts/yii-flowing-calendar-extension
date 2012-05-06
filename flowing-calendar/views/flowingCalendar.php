<h2 style="text-align: center;"><?php echo $this->title; ?></h2>
<?php $this->storePreviousLink = CHtml::link("<< Previous Month", array(Yii::app()->controller->id."/".Yii::app()->controller->action->id, 'startDate'=>$this->startDate, 'schedule'=>$this->schedule, 'month'=>$this->previousMonth, 'year'=>$this->yearPreviousMonth));
$this->storeNextLink = CHtml::link("Next Month >>", array(Yii::app()->controller->id."/".Yii::app()->controller->action->id, 'startDate'=>$this->startDate, 'schedule'=>$this->schedule, 'month'=>$this->nextMonth, 'year'=>$this->yearNextMonth)); ?>
<?php echo $this->printStartForm(); ?>
<?php echo $this->storePreviousLink; ?>
  .:: 
<?php echo $this->printControlMenu();?>
::.
<?php echo $this->storeNextLink; ?>
<?php echo $this->printCloseForm(); ?>
<?php echo $this->printCalendar(); ?>
