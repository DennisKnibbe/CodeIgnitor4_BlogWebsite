<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Blog Website</title>

    </head>
    <body>

        <style>

            body {
                font-family: 'Montserrat', sans-serif;
                margin: 0;
                padding: 0;
                width: 100%;
                display:flex; 
                flex-direction:column; 
                height:100vh;
            }

            ul {
                list-style: none;
                font-size: 1.3em;
            }

            a, a:hover, a:visited, a:active {
                color: inherit;
                text-decoration: none;
            }

            .logo {
                text-align: center;
                font-size: 2.3em;
            }

            .logo a, .main-nav a {
                padding: 0px 15px;
                text-transform: uppercase;
                font-weight: bold;
            }

            .main-nav{
                display: flex;
                direction: row;
                justify-content: center;
            }
            
            .main-nav a:hover {
                color: #718daa;
            }

            .header {
                padding-top: .5em;
                padding-bottom: .5em;
                border-bottom: 1px solid #a2a2a2;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
            }

            .main-nav a {
                color: black;
                text-transform: uppercase;
                text-decoration: none;
                letter-spacing: 0.15em;
                display: inline-block;
                padding: 15px 15px;
                position: relative;
            }

            .main-nav a:after {    
                background: none repeat scroll 0 0 transparent;
                bottom: 0;
                content: "";
                display: block;
                height: 4px;
                left: 50%;
                position: absolute;
                background: black;
                transition: width 0.3s ease 0s, left 0.3s ease 0s;
                width: 0;
            }

            .main-nav a:hover:after { 
                width: 100%; 
                left: 0; 
            }

            footer {
                background: #1A1E25;
                color: #868c96;
                margin-top:auto; 
            }

            footer p {
                padding: 30px 0;
                text-align: center;
            }


            @media (min-width: 1025px) {
                .header {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                }
                .main-nav{
                    align-items: center;
                    margin-right: 15%;
                }
                .logo{
                    margin-left: 15%;
                }

            }
        </style>

        <nav class="header">
            <h1 class="logo"><a href="/">Blogs</a></h1>
            <ul class="main-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/pages/allBlogs">Blogs</a></li>
                <li><a href="/blog/create">Create Blog</a></li>
            </ul>
        </nav>
