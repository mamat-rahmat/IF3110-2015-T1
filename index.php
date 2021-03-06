<!DOCTYPE html>
<html>
<head>
  <title>Simple StackExchange</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <?php require("backend/question-all.php"); ?>
</head>

<body>
  <h1>Simple StackExchange</h1>
  
  <div class="center">
      <form method="get" action="search.php">
        <input type="search" name="search" placeholder="Search...">
        <input type="submit" value="Search">
      </form>
    <p>Cannot find what you are looking for? <a href="add-question.php" class="orange">Ask here</a></p>
  </div>

  <h3>Recently Asked  Question</h3>
  <hr>
	
  <?php while($question = mysqli_fetch_array($result)){ ?>
    <table>
      <tr>
        <td align="center" valign="middle"> <?php echo $question['votes']; ?> </td>
        <td align="center" valign="middle"> <?php echo $question['votes']; ?> </td>
      </tr>
      <tr>
        <td align="center" valign="middle">Votes</td>
        <td align="center" valign="middle">Answers</td>
      </tr>
    </table>

    <p class="question-topic"><a href="question.php?id=<?php echo $question['id']; ?>"> <?php echo $question['topic']; ?> </a></p>
    <p class="question-detail"> <?php echo substr($question['content'], 0, 300); ?> ...</p>
    <p class="pull-right"><b>asked by <span class="purple"> <?php echo $question['name'] ?> </span> | <a href="edit-question.php?id=<?php echo $question['id']; ?>" class="orange">edit</a> | <a href="javascript:confirmDelete(<?php echo $question['id']; ?>)" class="red">delete</a></b></p>
    <hr>
	<?php } ?>
</body>
<script src="js/confirm-delete.js"></script>
</html>

