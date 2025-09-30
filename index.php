<html>
    <head>
        <title>Dynamic Div Content</title>
        <style>
            #myDiv,#myDiv2 {
                border: 1px solid black;
                padding: 20px;
                margin-top: 20px;
                background-color: lightblue;
            }
        </style>
    </head>
    <body>
        <div id="myDiv"></div>
        <button id="myButton">List Animals</button>   
        
        <div id="myDiv2"></div><br />
        <p>Put the name of an animal in the text box to search for that record</p>        
        <textarea id="myTextArea"></textarea><br />
        <button id="myButton2">Get Animal</button>
        
    </body>   
    <script>
        // Get references to button elements
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
                            p.textContent = record.animal; 
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

        // Get references to the textarea and button elements
        const myButton2 = document.getElementById('myButton2');


        // Add an event listener to the button
        myButton2.addEventListener('click', function() {             
            const myTextArea = document.getElementById('myTextArea');
            //fetch data from database
            fetch('http://localhost:8080/api/animal.php?animal=' + myTextArea.value)
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('myDiv2');
                    if (data && data.length > 0) {
                        data.forEach(record => {
                            const p = document.createElement('p');
                            p.textContent = `ID: ${record.id}, Animal: ${record.animal}, Color: ${record.color}, Legs: ${record.legs}`; 
                            container.appendChild(p);
                        });
                    } else {
                        container.textContent = 'No records found.';
                    }
                })
                .catch(error => {
                    console.error('Error fetching records:', error);
                    document.getElementById('myDiv2').textContent = 'Failed to load records.';
                });
            
        });
    </script>
</html>


