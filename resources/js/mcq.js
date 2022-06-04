
window.mcq = {

    question:'',
    option1:'',
    option2:'',
    option3:'',
    option4:'',
    currentQuestionNo:'',
    correctAns:0,
    wrongAns:0,
    skipAns:0,

    getQuestionCardHtml(){

        return `
        <div class="card">
            <div class="card-header">Question ${this.currentQuestionNo}</div>
            <div class="card-body">
                <p><strong>${this.question}</strong></p>
                <ol>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ans" id="option-1" value="option1" checked>
                            <label class="form-check-label" for="option-1">
                                ${this.option1}
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ans" id="option-2" value="option2">
                            <label class="form-check-label" for="option-2">
                                ${this.option2}
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ans" id="option-3" value="option3">
                            <label class="form-check-label" for="option-3">
                                ${this.option3}
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ans" id="option-4" value="option4">
                            <label class="form-check-label" for="option-4">
                                ${this.option4}
                            </label>
                        </div>
                    </li>
                </ol>
                <button onclick="mcq.skip()" class="btn btn-outline-dark hidden">Skip</button>
                <button onclick="mcq.next()" class="btn btn-outline-dark">Next</button>
            </div>
        </div>
    `;

    },

    getResultCardHtml(){

        return `
        <div class="card">
            <div class="card-header">Result</div>
            <div class="card-body">
                <ol>
                    <li>
                        <strong>Correct Answer: </strong>${this.correctAns}
                    </li>
                    <li>
                        <strong>Wrong Answer: </strong>${this.wrongAns}
                    </li>
                    <li>
                        <strong>Skip Answer: </strong>${this.skipAns}
                    </li>
                </ol>
            </div>
        </div>
    `;

    },


    skip(){

        axios.post(`${process.env.MIX_APP_URL}/mark-skip`).then((response) => {
            console.log(response.data);
        }).then(() => {
            this.currentQuestionNo++;
            this.loadQuestion({ 'questionNo': this.currentQuestionNo});
        }).catch((e) => {
            console.log(e);
        });

    },

    next(){

        const ans = document.querySelector('input[name="ans"]:checked').value;

        axios.post(`${process.env.MIX_APP_URL}/save-answer`,{
            ans,
        }).then((response) => {
            console.log(response.data);
        }).then(() => {
            if((this.currentQuestionNo == process.env.MIX_MAX_QUESTIONS)){
                this.showResult();
            } else {
                this.currentQuestionNo++;
                this.loadQuestion({ 'questionNo': this.currentQuestionNo});
            }
        }).catch((e) => {
            console.log(e);
        });
        
    },

    loadQuestion({questionNo,testDone}){


        if(testDone){
            this.showResult();
        } else {

            axios.get(`${process.env.MIX_APP_URL}/load-question/${questionNo}`).then((response) => {
                console.log(response.data);
                this.question = response.data.question;
                this.option1 = response.data.option1;
                this.option2 = response.data.option2;
                this.option3 = response.data.option3;
                this.option4 = response.data.option4;
                this.currentQuestionNo = questionNo;
                document.getElementById('mcq-card').innerHTML = this.getQuestionCardHtml();
            }).catch((e) => {
                console.log(e);
            });

        }

    },

    showResult(){

        axios.get(`${process.env.MIX_APP_URL}/show-result`).then((response) => {
            console.log(response.data);
            this.correctAns = response.data.correct_answer;
            this.wrongAns   = response.data.wrong_answer;
            this.skipAns    = response.data.skip_answer;
            document.getElementById('mcq-card').innerHTML = this.getResultCardHtml();
        }).catch((e) => {
            console.log(e);
        });

    }

};


