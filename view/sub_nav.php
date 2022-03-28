<style>
    .sub_nav{
        background-color:aliceblue;
        
        border-radius: 6px;
    }
    .sub_nav ul li{
         list-style-type: none;
    }
    .sub_nav ul li a{
        text-decoration: none;
        font-size: 1.5rem;
        color: black;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .sub_nav ul li a:hover{
        color: blue;
        text-decoration: underline;
        transition: all .3s ease-in-out;
    }
    .sub_nav h1{
        position: relative;
        color: blue;
        text-decoration: underline;
    }
</style>
<div class="sub_nav">
    <h1>Admin dashboard</h1>
    <ul>
        <li>
            <a href="order_detail.php">order detail</a>
        </li>
        <li>
            <a href="add_item.php">Add item</a>
        </li>
        <li>
            <a href="manage_item.php">Manage items</a>
        </li>
        <li>
            <a href="user_detail.php">User detail</a>
        </li>
        <li>
            <a href="creditors.php">Creditors detail</a>
        </li> 
    </ul>
</div>