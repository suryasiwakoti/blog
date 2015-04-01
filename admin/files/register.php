<form id="register" action="index.php?action=controller" method="post">
    <h1>Registration</h1>
    <p>
        Username: <input class="required email" type="text" name="username" />
    </p>
    <p>
        Password: <input class="required" type="password" name="pass" />
    </p>
    <p>
        Name:   
               <input class="required number" type="text" name="sname" />
    </p>
    <p>
        Address: <input class="required" type="text" name="saddress" />
    </p>
    <p>
        <input type="submit" name="register" value="register" />
    </p>

</form>