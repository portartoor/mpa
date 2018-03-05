<?
$page = new Page();
$params = $page->Parametres();
?>

<!--<h1><?=$params['title']?></h1>-->

<div class="main_menu">
	<a href="new/" class="punkt_1"><span>Добавить новую заявку</span></a>
	<a href="search/?map=1" class="punkt_2"><span>Поиск</span></a>
	<a href="/" class="punkt_3"><span>Уведомления (Лента)</span></ai>
	<a href="order/" class="punkt_4"><span>Мои заявки</span></a>
	<a href="/company/personal/user/<?
			global $USER;
			echo $USER->GetId();
			?>/tasks/" class="punkt_5"><span>Задачи</span></a>
	<?if($USER->IsAdmin()):?>
	<a href="new/step_5.php" class="punkt_4"><span>Тест</span></a>
	<?endif;?>
</div>