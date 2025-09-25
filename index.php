<html>
    <head>
        <title>Dynamic Div Content</title>
        <style>
            #myDiv {
                border: 1px solid black;
                padding: 20px;
                margin-top: 20px;
                background-color: lightblue;
            }
        </style>
    </head>
    <body>
        <div id="myDiv"></div>
        <button id="myButton">Change Content</button>    
    </body>   
    <script>
        // Get references to the div and button elements
        const myDiv = document.getElementById('myDiv');
        const myButton = document.getElementById('myButton');

        // Add an event listener to the button
        myButton.addEventListener('click', function() {
            //fetch data from database
            fetch('http://localhost:8080/api/animals.php')
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('myDiv');
                    if (data && data.length > 0) {
                        data.forEach(record => {
                            const p = document.createElement('p');
                            p.textContent = `ID: ${record.id}, Animal: ${record.animal}, Color: ${record.color}`; 
                            container.appendChild(p);
                        });
                    } else {
                        container.textContent = 'No records found.';
                    }
                })
                .catch(error => {
                    console.error('Error fetching records:', error);
                    document.getElementById('myDiv').textContent = 'Failed to load records.';
                });
            
        });
    </script>
</html>


