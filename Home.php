<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Penny Wise</title>
	<style>
	.container {
            display: inline-block;
            vertical-align: top; /* Aligns the container with the top of the line */
            width:300%;
        }
        #transactionForm {
            display: inline-block;
            vertical-align: top; /* Aligns the form with the top of the line */
        }
        .adjacent-image {
            width: 300%; /* Set image width to 50% of the page */
            height: auto;
        }
        </style>

	<link rel="stylesheet" type="text/css" href="home.css">
	<script src="script.js"></script>
    <a href="HomePage.php">HOME</a>
</head>
<body>
		<h1>Penny wise</h1>
	<div class="container">
	<header>

	</header>
	<main>
		<img src="pay.jpg" class="adjacent-image" width="500" height="100" >
		<section id="transaction">
			<h2>Add a new transaction:</h2>
			<form id="transactionForm">
				<div>
				<label for="description">Description:</label>
				<input type="text" id="description" name="description" required>
			</div>
			<div>
				<br>
				<label for="amount">Amount:</label>
				<input type="number" id="amount" name="amount" step="0.01" required>
			</div>
			<div>
               <br>
				<label for="date">Date:</label>
				<input type="date" id="date" name="date" required>
			</div>
			<div>
				<br>
				<label for="category">Category:</label>
				<select id="category" name="category">
					<option value="income">Income</option>
					<option value="expense">Expense</option>
				</select>
			</div>
			<br>
				<button type="submit">Add Transaction</button>
			</form>
			
			<script>
				document.addEventListener('DOMContentLoaded', function() {
    const expenseForm = document.getElementById('expense-form');
    const expenseList = document.getElementById('expense-list');

    expenseForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const expenseInput = document.getElementById('expense');
        const amountInput = document.getElementById('amount');

        const expense = expenseInput.value;
        const amount = parseFloat(amountInput.value);

        if (expense && !isNaN(amount)) {
            addExpense(expense, amount);
            expenseInput.value = '';
            amountInput.value = '';
        }
    });

    function addExpense(expense, amount) {
        const li = document.createElement('li');
        li.textContent = `${expense}: $${amount.toFixed(2)}`;
        expenseList.appendChild(li);
    }
});

			</script>
		</section>
		<section id="transactions">
			<h2>Transactions:</h2>
			<table border="1px">
				<thead>
					<tr>
						<th rowspan="10" colspan="10">Description</th>
						<th rowspan="10" >Amount</th>
						<th rowspan="10">Date</th>
						<th rowspan="10">Category</th>
					</tr>
					<tr>
				</thead>
			</table>

		</section>
	</main>
</body>
</html>

	
