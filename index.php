<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readers' Mind | Home Page | Welcome to Readers' Mind !</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo.png">
</head>

<body>
    <h1>Readers' Mind</h1>
    <p class="tp">
        Here you are. Welcome to <span>Readers' Mind</span> which is dedicated to review books and articles. We are here to enlarge readers society. With <span>Readers' Mind</span> you'l easily able to discover great books and articles. So lets dive deeply
        through the ocean of books.
    </p>

    <!--form-->
    <div class="frm">
        <h2>Add a Book</h2>
        <form class="fst-fm" action="process-form.php" method="post">
            <div class="blk">
                <input type="hidden" name="bookID" id="bookID">
            </div>
            <div class="blk">
                <label for="name">How it calls ?</label>
                <input type="text" name="name" id="name" placeholder="Name of the Book">
            </div>
            <div class="blk">
                <label for="author">Who wrote it ?</label>
                <input type="text" name="author" id="author" placeholder="Name the author">
            </div>
            <div class="blk">
                <label for="genre">What's the type of it ?</label>
                <input list="category" name="genre" id="genre" placeholder="Select the category">
                <datalist id="category">
                <option value="Action & Adventure"></option>
                <option value="Classics"></option>
                <option value="Comic Books"></option>
                <option value="Detective & Mystery"></option>
                <option value="Fantasy"></option>
                <option value="Historical Fiction"></option>
                <option value="Horror"></option>
                <option value="Literary Fiction"></option>
                <option value="Romance"></option>
                <option value="Science Fiction"></option>
                <option value="Short Stories"></option>
                <option value="Suspense & Triller"></option>
                <option value="Women's Fiction"></option>
                <option value="Biographies"></option>
                <option value="Cookery"></option>
                <option value="Essays"></option>
                <option value="History"></option>
                <option value="Memoir"></option>
                <option value="Self-Help"></option>
                <option value="True Crime"></option>
                <option value="Educational"></option>
                <option value="Novels"></option>
                <option value="Documentary"></option>
                <option value="Science"></option>
                <option value="Astronomy"></option>
                <option value="Erotic"></option>
            </datalist>
            </div>
            <div class="blk">
                <label for="publishdate">When was it published ?</label>
                <input type="date" name="publishdate" id="publishdate">
            </div>
            <div class="blk">
                <label for="summary">Say something about it ?</label>
                <textarea name="summary" id="summary" placeholder="How do you feel it ? What about it ? Why is it important ? etc ..."></textarea>
            </div>
            <div class="blk">
                <label for="sendemail">Who is the Submitter ?</label>
                <input type="email" name="sendemail" id="sendemail" placeholder="Type your E-mail">
            </div>
            <div class="blk bttn">
                <button id="go-btn" type="submit">Lets Go</button>
                <button id="no-btn" type="reset">Retry</button>
            </div>
        </form>
    </div>

    <!--search form-->
    <div class="frm02">
        <h2>Search about Books</h2>
        <form action="search.php" method="get" class="scnd-fm">
            <input type="text" name="query" id="srchbr" placeholder="Type the key word ...">
            <button type="submit" value="search" id="search" name="search"><span class="material-symbols-outlined">
                search
                </span></button>
        </form>
    </div>

    <!--bottum-->
    <div class="botm">
        <p class="qt">A Room without Book is like Body without Soul..</p>
        <div class="btmtbl">
            <p>Yara'</p>
            <p>@2022</p>
        </div>
    </div>
</body>

</html>