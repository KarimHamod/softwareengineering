<!DOCTYPE html>
<html lang="en" style>
<head>
    <meta charset="UTF-8">
    <title>iVOTE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin_css.css">
    <script src=javascript.index.js></script>
</head>
<body>
<nav class="admin_nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand navi"  href="index.php">iVOTE</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a class="navi" href="candidate.php">Candidates</a></li>
            <li><a class="navi" href="#">Results</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a  class="navi" href="#"><span class="glyphicon glyphicon-user"></span> Admin Name</a></li>
            <li><a  class="navi" href="#"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
        </ul>
    </div>
</nav>
<div class="admin_wrapper">
    <div class="side_bar">
        <ul class = "side_bar_ul">
        <li>
            <a href="#">Manage Candidates</a></li>
            <li><a href="#">Manage Admin</a></li>
            <li><a href="#">Manage Results</a></li>
        </ul>
    </div>
    <div class="admin_content">

        <h2 class="page_title">Manage Posts</h2>
        <table> 
            <thead>
                <th>SN</th>
                <th>Title</th>
                <th>Candidate</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>CandidateA</td>
                    <td>C-stuff</td>
                    <td class="edit"><a href="#">edit</a></td>
                    <td class="del"><a href="#">Delete</a></td>
                    <td class="add"><a href="#">ADD</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CandidateB</td>
                    <td>C-stuff</td>
                    <td class="edit"><a href="#">edit</a></td>
                    <td class="del"><a href="#">Delete</a></td>
                    <td class="add"><a href="#">ADD</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CandidateC</td>
                    <td>C-stuff</td>
                    <td class="edit"><a href="#">edit</a></td>
                    <td class="del"><a href="#">Delete</a></td>
                    <td class="add"><a href="#">ADD</a></td>
                </tr>
            </tbody>
        </table>
        <div  id="hello">
            <button href="creat.php" class="btn-create">Add Post</button>
            <button href="index.php" class="btn-create"> Manage Posts </button>
        </div>
    </div>
</body>


</html>