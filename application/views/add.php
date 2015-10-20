<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Add description ">
    <title>Add Book and Review</title>
</head>
	<body>
		<a href="/books"> Home </a>
		<a href="/books/logout"> Logout </a>
		<h2> Add a New Book Title and a Review: </h2>

		<form action='/books/create' method="post">
		<p>
			Book Title: <input type="text" name="title" >
		</p>
		<p>
			Author: 
				Choose from the list: <select name = "author">
									<option	value = 'author'> </option>									
									<?php foreach ($authors as $author) 
											{
												echo "<option value = 'author'>" . 
												$author['name'] . "</option>";
											}	
										?>

										</select>
				Or add a new author: <input type="text" name="author">
		</p>
		<p>
			Review: <textarea rows:10 cols: 10 name="comment" ></textarea>
		</p>
		<p> 
			Rating (1-5) <input type="number" name="rating" min="1" max="5"> stars
		</p>
		<input type="hidden" name="user_id" value="<?= $this->session->userdata['user id']; ?>" >
		<input type="submit" value="Add Book and Review">
		</form>

	</body>

</html>