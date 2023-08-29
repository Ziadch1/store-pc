<style>
    /* Navbar styles */
    .navbar {
        background-color: white;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* position: fixed; */
        /* width: 100%;
        z-index: 555; */
    }

    .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;

        
        
    }

    .navbar li {
        margin-right: 10px;
    }
    
    
    .navbar li a {
        display: block;
        color: #333;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar li a:hover {
        background-color: #ddd;
    }

    /* Dropdown menu */
    .navbar .dropdown {
        position: relative;
    }

    .navbar .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .navbar .icon {
        cursor: pointer;
        height: ;
    }

    .navbar .dropdown:hover .dropdown-content {
        display: block;
    }

    .navbar .dropdown-content a {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .navbar .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .logo {
        height: 60px;
        /* Adjust the height according to your preference */
        margin: 10px;
        /* Add margin to provide spacing */
    }

    /* Sidebar styles */
    .sidebar {
        width: 350px;
        /* Increased width of the sidebar */
        background-color: #f8f8f8;
        height: 100%;
        position: fixed;
        top: 0;
        right: -350px;
        /* Changed right value to match the width */
        transition: right 0.3s ease-in-out;
    }

    .sidebar.open {
        right: 0;
    }

    .sidebar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .sidebar li a {
        display: block;
        color: #333;
        padding: 10px 16px;
        text-decoration: none;
    }

    .sidebar li a:hover {
        background-color: #ddd;
    }

    .sidebar .close-icon {
        position: absolute;
        top: 10px;
        right: 10px;
        /* Adjusted right value for the close icon */
        cursor: pointer;
    }

    /* Footer styles */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    .container {
        flex: 1;
        padding-bottom: 60px;
    }

    .footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        flex-shrink: 0;
    }

    /* Table styles */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f5f5f5;
    }
</style>