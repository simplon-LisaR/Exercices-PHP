function checkEmail(theForm) {
    if (theForm.EMAIL.value != theForm.EMAIL2.value)
    {
        alert("L'email ne correspond pas !");
        return false;
    } else {
        return true;
    }
}
