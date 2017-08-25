<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Приложение-задачник</title>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/datatables.min.css">
  	</head>
  	<body>

<div id="task_preview" style="display: none;" class="container">
	<hr>
    <h2>Предварительный просмотр</h2>
    <div><img width="320" height="240" id="image" class="author_image" /></div> 
    <b>Автор:</b> <div id="author"></div>
    <b>Задача:</b> <div id="task_text"></div>
    <hr>
</div>

<div class="container">
  <h2>Создать задачу</h2>
  <form class="form-horizontal" action="/action_page.php" id="create_task">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_name">Автор:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_name" placeholder="Введите имя" name="user_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Задча:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="task" placeholder="Текст задачи" name="task"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="img">Изображение:</label>
      <div class="col-sm-10">
      	<div class="form-group">
            <label class="btn btn-default btn-file">
                Обзор <input type="file" style="display: none;" id="img" name="img">
            </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="filepath" placeholder="Путь к файлу" name="filepath">
                <div style="margin: -10px 0px 0px 20px;"><h5><small>формат JPG/GIF/PNG, не более 320х240 пикселей</small></h5></div>
            </div>    	
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      <button type="button" class="btn btn-default" onClick="show_task_preview();">Просмотр</button>
        <button type="submit" class="btn btn-default">Сохранить</button>
      </div>
    </div>
  </form>
</div>

<hr>

<div class="container">
  <h2>Авторизация</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="login">Логин:</label>
      <input type="login" class="form-control" id="login" placeholder="Введите логин" name="login">
    </div>
    <div class="form-group">
      <label for="pwd">Пароль:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Введите пароль" name="pwd">
    </div>
    <button type="submit" class="btn btn-default">Вход</button>
  </form>
</div>

<hr>

<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>№</th>
                <th>Задача</th>
                <th>Пользователь</th>
                <th>E-mail</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
            </tr>
        </tbody>
    </table>



    	<script src="js/jquery.min.js"></script>
    	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
        <script src="js/datatables.min.js"></script>
        
		<script type="application/javascript">
		
		var $data_img;
		function readURL(input) {
			if (input.files && input.files[0]) {	
				var reader = new FileReader();
				reader.onload = function (e) { $('#image').attr('src', e.target.result); };
				$data_img = reader.readAsDataURL(input.files[0]);
				$("#filepath").val(input.files[0].name);	
			}
		}

		$("#img").change(function(){ readURL(this); });
		$("#task").keyup(function(){ $task_text = $("#task").val(); $("#task_text").text($task_text); });
		$("#user_name").keyup(function(){ $user_name = $("#user_name").val(); $("#author").text($user_name); });
		
		function show_task_preview() { $("#task_preview").toggle(); }
        	
			$(document).ready(function() {
    			$('#example').DataTable();
			} );
        </script>
	</body>
</html>