<link rel="stylesheet" href="style/styles.css">
<?php

function getAllnames(){ /** This function will get and display every name from the database*/
    $con = mysqli_connect("localhost","root","","users_ads"); /** Connect to database*/
    $sql = "SELECT * FROM users"; /** Query*/
    $result = $con->query($sql);

    ?>
    <table>
        <th>Name</th>
    <?php
    while ($row = $result->fetch_assoc()) {?>
        <tr>
            <td>
                <?php
            echo "".$row["name"] . "<br>";
        }
    }
    ?>
        </td>
    </tr>
</table>


<?php
function getAllads(){ /** This function will get and display every advertisement from the database*/
    $con = mysqli_connect("localhost","root","","users_ads"); /** Connect to database*/
    $sql = "SELECT users.name, advertisements.title FROM advertisements INNER JOIN users ON advertisements.userid = users.id"; /** Query*/
    $result = $con->query($sql);

    ?>
    <table>
        <th>Name</th>
        <th>Advertisement title</th>
        <?php
        while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td>
                <?php
                echo "".$row["name"]."<br>";

                ?>
            </td>
            <td>
                <?php
                echo "".$row["title"]."<br>";
                }
            }
                ?>
            </td>
        </tr>
    </table>
