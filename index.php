<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Suggestions</title>

    <link href="https://bootswatch.com/5/darkly/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
    </script>
    <script src = './suggestions.js' defer></script>


</head>
<body>

    <div class ='container'>
        <form action = 'javascript:void(0);'>
            <h1>Search Word </h1>
            <input id = 'input-field' class = 'form-control' type = 'text' placeholder = 'Enter a word'>
            <p>Suggestions: <span id ='output-field' style = 'font-weight:bold'></span></p>
        </form>
    </div>

</body>
</html>