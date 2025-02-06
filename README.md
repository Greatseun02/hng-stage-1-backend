# HNG-STAGE-1-Backend# HNG STAGE 0 BACKEND TASK


### DESCRIPTION
This is a simple API that takes a number and returns interesting mathematical properties about it, along with a fun fact.

### FRAMEWORK
PHP

### RUN LOCALLY
#### Using XAMPP

Using your CMD terminal navigate into your htdocs in your XAMPP folder.
Run git clone "https://github.com/Greatseun02/hng-stage-1-backend.git";  
Start Apache using your XAMPP control panel.
Navigate your browser and enter http://localhost/HNG-STAGE-1-BACKEND/api/classify-number/?number=your_number

### REQUEST
Endpoint: "api/classify-number"  
Parameter: number -- an integer
Method: GET  
Example Request: GET "{{url}}/api/classify-number?number=371"  

### RESPONSE
Status Code: 200 ok  
Body: JSON
Example Response: {  
  "number": 13,  
    "is_prime": true,  
    "properties": [  
        "odd"  
    ],  
    "digit_sum": 4,  
    "fun_fact": "13 is the number of Archimedian solids."  
}





