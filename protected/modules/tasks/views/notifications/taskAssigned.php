<?php $this->beginContent('application.modules_core.notification.views.notificationLayout', array('notification' => $notification)); ?>

<strong><?php echo $creator->displayName; ?></strong>
<?php echo Yii::t('TasksModule.base', 'assigned you to the task '); ?>
<?php echo $targetObject->getContentTitle(); ?>

<?php $this->endContent(); ?>





