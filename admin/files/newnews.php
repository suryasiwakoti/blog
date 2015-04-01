<form id="new news" action="index.php?action=controller" method="post">
    <h1>New News</h1>
    <p>
        News Title: <input class="text" type="text" name="newstitle" />
    </p>
    <p>
        News: <br>      
        <textarea name="news" cols="25" rows="5">
Enter your news here...
</textarea>

    </p>
    <form method="post" action="">
    <p>
       Category: <select>
  <option value="volvo">National</option>
  <option value="saab">International</option>
 </select>
    </p>
    <p>
        Date: <input class="required" type="date" name="sdate" />
    </p>
    <p>
        <input type="submit" name="post" value="post" />
    </p>

</form>