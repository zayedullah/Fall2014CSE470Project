
function validateName(field)
{
    return (field == "") ? "No Name was entered.\n" : ""
}
function validateUsername(field)
{
    return (field == "") ? "No Username was entered.\n" : ""
}
function validatePassword(field)
{
    if (field == "") 
        return "No Password was entered.\n"
    else if (field.length < 5)
        return "Passwords must be at least 5 characters.\n"

    return ""
}
function validateEmail(field)
{
    if (field == "") 
        return "No Email was entered.\n"
    else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
        return "The Email address is invalid.\n"

    return ""
}
function validatePhone(field)
{
    return (field == "") ? "No Phone number was entered.\n" : ""
}
function validateCreditCard(field)
{
    return (field == "") ? "No Credit Card number was entered.\n" : ""
}

function validate(form)
{
    fail = validateName(form.name.value)
    fail += validateUsername(form.username.value)
    fail += validatePassword(form.password.value)
    fail += validateEmail(form.email.value)
    fail += validatePhone(form.phone.value)
    fail += validateCreditCard(form.ccn.value)
    if (fail == "") return true
    else { alert(fail); return false }
}
