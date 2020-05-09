<html>
	<head>
		<title>JSON</title>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("a").click(function(){
					$.post(
						"data.php",
						{
							id :  $("#bid").val()
						},
						function(datas){
							console.log(datas);
							var Book = $.parseJSON(datas);
							if(Book != null){
								$("#id").html(Book.id);
								$("#title").html(Book.title);
								$("#author").html(Book.author);
							} else {
								$("#id").html('');
								$("#title").html('');
								$("#author").html('');
							}
						}
					);
					return false;
				});
			});
		</script>
	<head>
	<body>
		<input type='text' id='bid' />
		<a href=""> Search </a>
		<br /><br />
		<table>
			<tr>
				<td>id</td>
				<td id='id'></td>
			</tr>
			<tr>
				<td>title</td>
				<td id='title'></td>
			</tr>
			<tr>
				<td>author</td>
				<td id='author'></td>
			</tr>
		</table>
	</body>
</html>