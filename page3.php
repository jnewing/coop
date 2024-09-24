<!doctype html>
<html>
<head>
    <title>This is the title of the webpage!</title>
</head>
<body>
    <h1>Example Form Page</h1>
    <p>This is an example paragraph. Anything in the <strong>body</strong> tag will appear on the page, 
    just like this <strong>p</strong> tag and its contents.</p>

    <form action="actions.php">
        <label>Field 1:</label>
        <input type="text" name="field1" />
        <br /><br />

        <label>Email Field</label>
        <input type="email" name="some_email" />
        <br /><br />

        <label>Text Area</label><br />
        <textarea placeholder="put some stuff here." name="more_stuff"></textarea>
        <br /><br />

        <button type="submit">Process...</button>
    </form>
</body>
</html>
