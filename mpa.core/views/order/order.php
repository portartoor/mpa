<?
$page = new Page();
$params = $page->Parametres();
?>

<!--<h1><?=$params['title']?></h1>-->
<div class="webform_realty">
	<form name="my_requests" action="#" method="POST" enctype="multipart/form-data">
		<div class="search_content">
			<div class="field_to_fill_text">Тип недвижимости</div>
			
			<div class="field_to_fill_text">Тип объекта</div>
			
			<div class="field_to_fill_text">Агент</div>
				
		</div>
		<div class="filter_sort">
			
		</div>
		<input id="my_request_show" class="big_button" type="submit" name="web_form_submit" value="Поиск" />
	</form>
</div>