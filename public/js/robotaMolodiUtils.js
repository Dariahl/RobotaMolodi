/**
 * Created by Quicks on 17.09.2015.
 */
function  CheckForm()
{
    var salaryField = $('[name = salary]').val();
    var results = salaryField;
    

    if(salaryField.search(' ') > -1)
    {
        salaryField = salaryField.trim();
        salaryField = salaryField.split(' ');
        if(salaryField.length>1)
            results = salaryField[0] + salaryField[1];
    }

    document.getElementById('Salary').value = results;

    return true;


}
