<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<ul>
<!--
	foreach循环输出信心,注意:号使用,切记必须使用<?php ?>包含foreach.
	还有循环结束必须以<?php endforeach;?>结尾
-->
<?php foreach($users as $user):?>
    <li>
        <?= Html::encode($user->name)?>----<?= Html::encode($user->phone)?>
    </li>
<?php endforeach;?>
</ul>


<!--
	分页显示切记必须使用<?= ?>不然显示不出来
-->
<?= LinkPager::widget(['pagination'=>$page])?>
