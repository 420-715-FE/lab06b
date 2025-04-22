<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de tâches</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <h1>Liste de tâches</h1>
    <form action="?action=add" method="POST">
        <table>
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Description</th>
                    <th>Priorité</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($tasks as $task) {
                    echo "<tr>";
                    echo "<td style=\"text-align:center;\"><a href=\"?action=delete&id={$task['id']}\">❌ </a></td>";
                    echo "<td>{$task['description']}</td>";
                    echo "<td>{$task['description_priorite']}</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Ajouter une tâche:</th>
                    <td><input style="margin-right: 2px;" type="text" name="description" required></td>
                    <td>
                        <select name="priority" required>
                            <option disabled selected></option>
                            <?php
                                foreach ($priorities as $priority) {
                                    echo "<option value='{$priority['id']}'>{$priority['description']}</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="Soumettre">
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>
