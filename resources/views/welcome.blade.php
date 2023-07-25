<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the Envoy Trigger</h1>
    <form action="{{ route('trigger.envoy') }}" method="POST">
        @csrf
        <label for="local_folder_path">Local Folder Path:</label>
        <input type="text" name="local_folder_path" id="local_folder_path" required>
        <button type="submit">Run Envoy Task</button>
    </form>
</body>
</html>
