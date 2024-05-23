<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Archery Score Recording</title>

    <link rel="stylesheet" href="css/main.css">

</head>
<body>

    <header>

        <h1>Archery Score Recording</h1>

    </header>
    
    <main>
        <form id="score-form" method="post" action="submit_score.php">

            <div>

                <label for="round">Select Round:</label>

                <select id="round" name="round">

                    <option value="round1">Round 1</option>
                    <option value="round2">Round 2</option>
                    <!-- Add more rounds as needed -->

                </select>

            </div>
            <div>

                <label for="archer">Select Archer:</label>
                <input type="text" id="archer" name="archer" placeholder="Archer's name" required>

            </div>
            <div>

                <label for="equipment">Equipment:</label>
                <input type="text" id="equipment" name="equipment" value="Default Equipment" required>

            </div>
            <div>

                <label for="ends">Number of Ends:</label>
                <input type="number" id="ends" name="ends" min="1" required>

            </div>

            <button type="submit">Submit</button>

        </form>

        <div id="score-entry">
            <!-- Score entry will be dynamically added here -->
        </div>

    </main>
</body>
</html>
