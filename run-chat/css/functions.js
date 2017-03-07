	function searchID()
	{
		var empEntry = document.getElementById('staff_id').value;
		var request = new Ajax.Request
			('getstaff.php', 
				 { method: 'get',
					parameters: {targetstaff: empEntry, sid: Math.random()},
				
					onComplete: returnStaff}
			);
	}

	function returnStaff(xmlHTTP)
	{
		document.getElementById('toInsert').innerHTML =  xmlHTTP.responseText;
	}
	
		function searchName()
	{
		var empEntry = document.getElementById('staff_id').value;
		var request = new Ajax.Request
			('getstaffname.php', 
				 { method: 'get',
					parameters: {targetstaff: empEntry, sid: Math.random()},
				
					onComplete: resultsReturned}
			);
	}

	function resultsReturned(xmlHTTP)
	{
		document.getElementById('toInsert').innerHTML =  xmlHTTP.responseText;
	}
	
	function taskID()
	{
		var taskEntry = document.getElementById('task_id').value;
		var request = new Ajax.Request
			('gettask.php', 
				 { method: 'get',
					parameters: {targettask: taskEntry, sid: Math.random()},
				
					onComplete: returnTask}
			);
	}

	function returnTask(xmlHTTP)
	{
		document.getElementById('toInsert').innerHTML =  xmlHTTP.responseText;
	}
	
		function searchTask()
	{
		var taskEntry = document.getElementById('task_id').value;
		var request = new Ajax.Request
			('gettaskname.php', 
				 { method: 'get',
					parameters: {targettask: taskEntry, sid: Math.random()},
				
					onComplete: tasksReturned}
			);
	}

	function tasksReturned(xmlHTTP)
	{
		document.getElementById('toInsert').innerHTML =  xmlHTTP.responseText;
	}
	
	function deleteTask()
	{
		document.getElementById('toClear').style.display="none";
		var taskEntry = document.getElementById('task_id').value;
		var request = new Ajax.Request
			('show_delete.php', 
				 { method: 'get',
					parameters: {targettask: taskEntry, sid: Math.random()},
				
					onComplete: returnDelete}
			);
	}

	function returnDelete(xmlHTTP)
	{
		document.getElementById('toDelete').innerHTML =  xmlHTTP.responseText;
	}
	
	function ensureForm()
	{
		var task = document.getElementById('task_ID').value;
		return confirm('Do you really want to delete this task ('+task+')?');
	}
	
	// General function to validate empty formfields. Usually called by another function
	function validRequired(formField)
	{
		if (formField.value == "")  
		{
			formField.style.borderColor = "red";
			return false;
		}
		formField.style.borderColor = "green";
		return true;
	}
	
	function selectRequired(formField)
	{
		if (formField.value == "ierror")  
		{
			formField.style.borderColor = "red";
			return false;
		}
		formField.style.borderColor = "green";
		return true;
	}
	
	function dependentRequired(formField)
	{
		var targetElement = document.getElementById(formField);
		if (targetElement == null)
		{
			return false;
		}
		return selectRequired(targetElement);
	}

	function checkRequired(formField, checkField)
	{
		if (formField.value == "")  
		{
			if(checkField.checked)
			{
				return true;
			}
			else
			{
				formField.style.borderColor = "red";
				return false;
			}
		}
		formField.style.borderColor = "green";
		return true;
	}
	
	// This function sets focus on a form predetermined input field.
	function setFocus(target)
	{
		document.getElementById(target).focus();
	}

	function specialFocus(target, div)
	{
		document.getElementById(target).focus();
		document.getElementById(div).innerHTML = "";
		document.getElementById(target).value = "";
	}