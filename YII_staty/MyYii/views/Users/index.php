<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<ul>
<!--
	foreachѭ���������,ע��:��ʹ��,�мǱ���ʹ��<?php ?>����foreach.
	����ѭ������������<?php endforeach;?>��β
-->
<?php foreach($users as $user):?>
    <li>
        <?= Html::encode($user->name)?>----<?= Html::encode($user->phone)?>
    </li>
<?php endforeach;?>
</ul>


<!--
	��ҳ��ʾ�мǱ���ʹ��<?= ?>��Ȼ��ʾ������
-->
<?= LinkPager::widget(['pagination'=>$page])?>
