<!-- resources/views/welcome.blade.php -->
{{-- <!DOCTYPE html> --}}
<html>
<head>
    <title>Laravel Portal - UAT Setup</title>
</head>
<body>
    <h1>Projects</h1>
    <ul>
        <li><button onclick="setupUAT('project_a')">Project A</button></li>
        <!-- Add more project buttons as needed -->
    </ul>

    <script>
        function setupUAT(project) {
            fetch(`/setup-uat-${project}`).then(response => {
                if (response.ok) {
                    alert(`UAT setup for ${project} started.`);
                } else {
                    alert(`Failed to start UAT setup for ${project}.`);
                }
            }).catch(error => {
                alert(`Error occurred while starting UAT setup for ${project}.`);
                console.error(error);
            });
        }
    </script>
</body>
</html>
