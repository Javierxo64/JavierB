document.addEventListener('DOMContentLoaded', function () {
    var questions = document.querySelectorAll('#relaves-info li');

    questions.forEach(function (question) {
        question.addEventListener('click', function () {
            var answer = this.querySelector('p');
            answer.style.display = 'none';
        });
    });
});
