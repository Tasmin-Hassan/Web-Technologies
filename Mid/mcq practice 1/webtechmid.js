function checkAnswers() {

    let answers = {
        q1:"b", q2:"a", q3:"a", q4:"b", q5:"a", q6:"c", q7:"c", q8:"b", q9:"c", q10:"b",
        q11:"b", q12:"b", q13:"a", q14:"b", q15:"b", q16:"c", q17:"c", q18:"c", q19:"c", q20:"c",
        q21:"b", q22:"b", q23:"c", q24:"b", q25:"b", q26:"a", q27:"a", q28:"c", q29:"a", q30:"b",

        q31:"b", q32:"b", q33:"b", q34:"a", q35:"c", q36:"d", q37:"d", q38:"b", q39:"c", q40:"b",
        q41:"a", q42:"b", q43:"a", q44:"b", q45:"c", q46:"b", q47:"b", q48:"a", q49:"b", q50:"a",

        q51:"d", q52:"b", q53:"b", q54:"c", q55:"a", q56:"d", q57:"b", q58:"a", q59:"c", q60:"a",

        q61:"a", q62:"a", q63:"c", q64:"d", q65:"a", q66:"c", q67:"d", q68:"a", q69:"a", q70:"b",

        q71:"a", q72:"c", q73:"b", q74:"c", q75:"a", q76:"d", q77:"b", q78:"b"
    };

    let score = 0;

    for (let i = 1; i <= 78; i++) {

        let selected = document.querySelector(`input[name="q${i}"]:checked`);

        let correct = answers[`q${i}`];

        let ansText = "";

        // correct option text mapping
        let optionText = {
            a: "Option A",
            b: "Option B",
            c: "Option C",
            d: "Option D"
        };

        if (selected) {
            if (selected.value === correct) {
                score++;
                ansText = "✅ Correct Answer: " + optionText[correct];
                document.getElementById("a"+i).style.color = "lightgreen";
            } else {
                ansText = "❌ Correct Answer: " + optionText[correct];
                document.getElementById("a"+i).style.color = "red";
            }
        } else {
            ansText = "⚠️ Correct Answer: " + optionText[correct];
            document.getElementById("a"+i).style.color = "orange";
        }

        document.getElementById("a"+i).innerText = ansText;
    }

    document.getElementById("score").innerText =
        "Your Score: " + score + " / 78";
}