class DateRangePicker {
    static currentDate = new Date();
    static #month = ['Ene.', 'Feb.', 'Mar', 'Abr', 'May', 'Jun', 'Jul.', 'Agos', 'Sept', 'Oct', 'Nov', 'Dec'];
    static #fullnameMonth = [
        'Enero', 
        'Febrero', 
        'Marzo', 
        'Abril', 
        'Mayo', 
        'Junio', 
        'Julio', 
        'Agosot', 
        'Septiembre', 
        'Octubre', 
        'Noviembre', 
        'Diciembre'
    ];
    static #handleClickTarget(target, calendarDOM) {
        const posTarget = target.getBoundingClientRect();
        calendarDOM.setAttribute('class', 'cal-container');
        calendarDOM.style.left = `${posTarget.x}px`;
        calendarDOM.style.top = `${posTarget.y + posTarget.height + 0.5}px`;
    }

    static #handleClickBtnNav(instance, date, calendar, direction) {
        const calMonth = calendar.querySelector('.cal-month');
        const calYear = calendar.querySelector('.cal-year');
        if(direction == 'prev'){
            date.setMonth(date.getMonth() - 1);
        } else if(direction == 'next') {
            date.setMonth(date.getMonth() + 1);
        }
        calMonth.textContent = DateRangePicker.#month[date.getMonth()];
        calMonth.dataset.month = date.getMonth();

        calYear.textContent = date.getFullYear();
        calYear.dataset.month = date.getFullYear();
        DateRangePicker.#generateBodyTable(instance, calendar.querySelector('.cal-body-table'), date.getFullYear(), date.getMonth());
    }

    static #handleClickBtnSelectYear(inputYear, instance, tableContainer, yearSpan) {
        if(/[0-9]{4,5}/.test(inputYear.value)) {
            yearSpan.textContent = inputYear.value;
            instance.#date = new Date(+inputYear.value, instance.#date.getMonth(), instance.#date.getDate());
            const tableMonth = tableContainer.querySelector('.cal-table-month');
            const yearSelectorContainer = tableContainer.querySelector('.cal-year-selector-container');
            yearSelectorContainer.classList.add('cal-hide');
            tableMonth.classList.remove('cal-hide');
        } else {
            alert("Veuillez entrer une année correcte");
        }
    }

    static #handleQuickSelectClick(instance, tableContainer) {
        const tableDay = tableContainer.querySelector('.cal-table-day');
        if(tableDay)
            tableDay.classList.add('cal-hide');

        const yearSelectorContainer = tableContainer.querySelector('.cal-year-selector-container');
        if(yearSelectorContainer)
            yearSelectorContainer.classList.remove('cal-hide');

        const btnSelectYear = tableContainer.querySelector('button.cal-btn-select-year');
        const inputYear = tableContainer.querySelector('input.cal-year-input');
        const yearSpan = tableContainer.parentElement.querySelector('.cal-year');
        const btnNavContainer = tableContainer.parentElement.querySelector('.cal-nav-container');
        btnSelectYear.onclick = (e) => {
            DateRangePicker.#handleClickBtnSelectYear(inputYear, instance, tableContainer, yearSpan);
        };
        btnNavContainer.classList.add('cal-hide');
    }

    static #formatDate(date) {
        const month = date.getMonth()+1 > 9 ? `${date.getMonth()+1}` : `0${date.getMonth()+1}`;
        const day = date.getDate() > 9 ? `${date.getDate()}` : `0${date.getDate()}`;
        return `${date.getFullYear()}/${month}/${day}`;
    }

    static #generateYearSelector(instance, tableContainer) {
        const yearSelectorContainer = document.createElement('div');
        yearSelectorContainer.setAttribute('class', 'cal-year-selector-container cal-hide');

        const divInputContainer = document.createElement('div');
        divInputContainer.setAttribute('class', 'cal-input-container');
        

        const tableElem = document.createElement('table');
        const tbody = document.createElement('tbody');

        tableElem.setAttribute('class', 'cal-table cal-table-year');
        tbody.setAttribute('class', 'cal-body-table');
        let tr;
        const currentYear = DateRangePicker.currentDate.getFullYear();
        let j = 0;
        for(let i = currentYear; i<= currentYear+1; i++){
            if(j % 5 === 0){
                tr = document.createElement('tr');
                tr.setAttribute('class', 'cal-row-table');
                tbody.appendChild(tr);
            }
            const td = document.createElement('td');
            td.setAttribute('class', 'cal-year-td');
            if(i === currentYear)
                td.classList.add('cal-current-year');
            td.textContent = i;
            td.dataset.year = i;
            tr.appendChild(td);
            j++;
        }
        tbody.onclick = (e) => {
            const target = e.target;
            if(target.nodeName.toLowerCase() === 'td'){
                const yearSpan = tableContainer.parentElement.querySelector('.cal-year');
                yearSpan.textContent = target.dataset.year;
                instance.#date = new Date(+target.dataset.year, instance.#date.getMonth(), instance.#date.getDate());
                yearSelectorContainer.classList.add('cal-hide');
                const tableMonth = tableContainer.querySelector('.cal-table-month');
                if(tableMonth)
                    tableMonth.classList.remove('cal-hide');
            }
        };
        tableElem.appendChild(tbody);
        yearSelectorContainer.appendChild(divInputContainer);
        yearSelectorContainer.appendChild(tableElem);
        return yearSelectorContainer;
    }

    static #generateMonthSelector(instance, tableContainer) {
        const tableElem = document.createElement('table');
        const tbody = document.createElement('tbody');

        tableElem.setAttribute('class', 'cal-table cal-table-month cal-hide');
        tbody.setAttribute('class', 'cal-body-table');
        let tr;
        const currentMonth = DateRangePicker.currentDate.getMonth();
        let j = 0;
        for(let i = 0; i < DateRangePicker.#fullnameMonth.length; i++){
            if(i % 3 === 0){
                tr = document.createElement('tr');
                tr.setAttribute('class', 'cal-row-table');
                tbody.appendChild(tr);
            }
            const td = document.createElement('td');
            td.setAttribute('class', 'cal-month-td');
            if(i === currentMonth)
                td.classList.add('cal-current-month');
            td.textContent = DateRangePicker.#fullnameMonth[i];
            td.dataset.month = i;
            tr.appendChild(td);
        }
        tbody.onclick = (e) => {
            const target = e.target;
            if(target.nodeName.toLowerCase() === 'td'){
                const monthSpan =  tableContainer.parentElement.querySelector('.cal-month');
                monthSpan.textContent = DateRangePicker.#month[+target.dataset.month];
                instance.#date = new Date(instance.#date.getFullYear(), +target.dataset.month, instance.#date.getDate());
                tableElem.classList.add('cal-hide');
                let tableDay = tableContainer.querySelector('.cal-table-day');
                if(tableDay) {
                    DateRangePicker.#generateBodyTable(instance, tableDay.lastElementChild, instance.#date.getFullYear(), +target.dataset.month);
                    tableDay.classList.remove('cal-hide');
                }
                const btnNavContainer = tableContainer.parentElement.querySelector('.cal-nav-container');
                btnNavContainer.classList.remove('cal-hide');
            }
        };
        tableElem.appendChild(tbody);
        return tableElem;
    }

    static #generateTable(instance, year, month) {
        const tableElem = document.createElement('table');
        const thead = document.createElement('thead');
        const tbody = document.createElement('tbody');

        tableElem.setAttribute('class', 'cal-table cal-table-day');
        thead.setAttribute('class', 'cal-head-table');
        tbody.setAttribute('class', 'cal-body-table');

        thead.innerHTML = `
            <tr class="cal-row-table">
                <th>L</th>
                <th>M</th>
                <th>M</th>
                <th>J</th>
                <th>V</th>
                <th>S</th>
                <th>D</th>
            </tr>
        `;

        DateRangePicker.#generateBodyTable(instance, tbody, year, month);
        
        tableElem.appendChild(thead);
        tableElem.appendChild(tbody);
        return tableElem;
    }

    static #generateBodyTable(instance, tbody, year, month) {
        tbody.innerHTML = '';
        const nbDayThisMonth = (new Date(year, month+1, 0)).getDate();
        let firstDayMonth = (new Date(year, month, 1)).getDay() - 1;
        firstDayMonth = (firstDayMonth < 0) ? 7 + firstDayMonth : firstDayMonth;
        let aux = 0;
        const daysBeforeFirstDayMonth = [];
        while(aux !== firstDayMonth) {
            const td = document.createElement('td');
            daysBeforeFirstDayMonth.push(td);
            aux++;
        }
        let tr = document.createElement('tr');
        tr.setAttribute('class', 'cal-row-table');
        daysBeforeFirstDayMonth.forEach(td => tr.appendChild(td));
        tbody.appendChild(tr);
        let tmpDate;
        for(let i = 0; i < nbDayThisMonth; i++) {
            tmpDate = new Date(year, month, i+1);
            if((aux+i) % 7 === 0){
                tr = document.createElement('tr');
                tr.setAttribute('class', 'cal-row-table');
                tbody.appendChild(tr);
            }
            const td = document.createElement('td');
            td.setAttribute('class', 'cal-date');
            if(i+1 === DateRangePicker.currentDate.getDate() && 
                    DateRangePicker.currentDate.getMonth() === month && 
                    DateRangePicker.currentDate.getFullYear() === year)
                td.classList.add('cal-current-date');
            if(instance.start < tmpDate && tmpDate < instance.end) 
                td.classList.add('cal-date-in-range');
            if(DateRangePicker.#formatDate(instance.start) === DateRangePicker.#formatDate(tmpDate))
                td.classList.add('cal-start');
            if(DateRangePicker.#formatDate(instance.end) === DateRangePicker.#formatDate(tmpDate))
                td.classList.add('cal-end');
            td.textContent = `${i+1}`;
            td.dataset.date = `${year}/${month+1 > 9 ? month+1 : '0'+(month+1)}/${i+1 > 9 ? i+1 : '0'+(i+1)}`;
            tr.appendChild(td);
        }

        tbody.onclick = (e) => {
            const target = e.target;
            if(target.nodeName.toLowerCase() === 'td'){
                instance.#handleClickDate(target);
            }
        };
    }

    #dateSelected = new Date(DateRangePicker.currentDate.getFullYear(), DateRangePicker.currentDate.getMonth(), 1);
    #target = null;
    #callback = null;
    #args = null;
    #calendar = null;
    #start = DateRangePicker.currentDate;
    #end = DateRangePicker.currentDate;
    #step = 0;
    #callbackReturn = null;


    constructor(selector, options = {
        onchange: null,
        args: null
    }) {
        if(options && options.onchange && options.onchange instanceof Function && options.onchange.length >= 2){
            this.#callback = options.onchange;
            if(options.args && options.args instanceof Array){
                this.#args = options.args;
            } else {
                throw new Error("args doit être de type Array");
            }
        } else if(options && options.onchange){
            throw new Error("onchange doit être de type Function et ses deux premiers arguments doivent être des dates (en string ou un objet Date).");
        }
        if(options && options.start && options.end){
            try {
                this.#start = new Date(options.start);
                this.#end = new Date(options.end);
            } catch (error) {
                throw new Error("Date de début ou date de fin invalide.");
            }
        } else if(options && options.start) {
            try {
                this.#start = new Date(options.start);
            } catch (error) {
                throw new Error("Date de début invalide.");
            }
        } else if(options && options.end) {
            throw new Error("Date de début inconnue.");
        }
        this.#target = document.querySelector(selector);
        this.#target.classList.add('cal-input-range');
        this.#calendar = this.#init();
        this.#target.value = `${DateRangePicker.#formatDate(this.#start)} - ${DateRangePicker.#formatDate(this.#end)}`;
        this.#target?.addEventListener('click', (e) => {
            DateRangePicker.#handleClickTarget(this.#target, this.#calendar);
        });
        document.body.addEventListener('click', e => {
            if(this.#target !== e.target && !this.#calendar.contains(e.target))
                this.#calendar.setAttribute('class', 'cal-container cal-hide');
        });
    }

    get #date() {
        return this.#dateSelected;
    }

    set #date(newDate) {
        try {
            this.#dateSelected = new Date(newDate);
        } catch (error) {
            console.error("Date invalide");
            alert("Date invalide.");
            throw error;
        }
    }

    get callback() {
        return this.#callback;
    }

    set callback(newCallback) {
        if(newCallback instanceof Function && newCallback.length >= 2){
            this.#callback = newCallback;
        } else {
            throw new Error("onchange doit être de type Function et ses deux premiers arguments doivent être des dates (en string ou un objet Date).");
        }
    }

    get args() {
        return this.#args;
    }

    set args(newArgs) {
        if(newArgs instanceof Array){
            this.#args = newArgs;
        } else {
            throw new Error("args doit être de type Array");
        }
    }

    getCallbackReturn() {
        return this.#callbackReturn;
    }

    get start() {
        return this.#start;
    }

    get end() {
        return this.#end;
    }

    getRange() {
        if(this.#step === 1)
            return {
                start: this.#start,
                end: null
            };
        return {
            start: this.#start,
            end: this.#end
        };
    }

    #init() {
        const calContainer = document.createElement('div');
        const calHeader = document.createElement('div');
        const calSelectContainer = document.createElement('div');
        const calNavContainer = document.createElement('div');
        const btnNavPrev = document.createElement('button');
        const btnNavNext = document.createElement('button');
        const tableContainer = document.createElement('div');
        const tableDay = DateRangePicker.#generateTable(this, this.#dateSelected.getFullYear(), this.#dateSelected.getMonth());
        

        calContainer.setAttribute('class', 'cal-container cal-hide');
        calHeader.setAttribute('class', 'cal-row cal-header');
        calSelectContainer.setAttribute('class', 'cal-select-container');
        calNavContainer.setAttribute('class', 'cal-nav-container');
        btnNavPrev.setAttribute('class', 'cal-nav nav-prev');
        btnNavNext.setAttribute('class', 'cal-nav nav-next');
        tableContainer.setAttribute('class', 'cal-table-container');

        calSelectContainer.innerHTML = `
            <span class="cal-month" data-month="${this.#dateSelected.getMonth()}">${DateRangePicker.#month[this.#dateSelected.getMonth()]}</span>&nbsp;&nbsp;
            <span class="cal-year" data-year="${this.#dateSelected.getFullYear()}">${this.#dateSelected.getFullYear()}</span>
            <hr/>
        `;
        calSelectContainer.onclick = (e) => {
            DateRangePicker.#handleQuickSelectClick(this, tableContainer);
        }

        btnNavPrev.textContent = '‹';
        btnNavPrev.onclick = (e) => {
            DateRangePicker.#handleClickBtnNav (this, this.#dateSelected, this.#calendar, 'prev');
        };
        btnNavNext.textContent = '›';
        btnNavNext.onclick = (e) => {
            DateRangePicker.#handleClickBtnNav(this, this.#dateSelected, this.#calendar, 'next');
        };
        calNavContainer.appendChild(btnNavPrev);
        calNavContainer.appendChild(btnNavNext);
        calHeader.appendChild(calSelectContainer);
        calHeader.appendChild(calNavContainer);

        calContainer.appendChild(calHeader);
        tableContainer.appendChild(tableDay);
        calContainer.appendChild(tableContainer);

        const tableMonth = DateRangePicker.#generateMonthSelector(this, tableContainer);
        const tableYear = DateRangePicker.#generateYearSelector(this, tableContainer);
        tableContainer.appendChild(tableMonth);
        tableContainer.appendChild(tableYear);

        document.body.appendChild(calContainer);
        return calContainer;
    }

    #stepZero(target) {
        try {
            this.#start = new Date(target.dataset.date);
        } catch (error) {
            console.error("Date invalide");
            alert("Date invalide.");
            throw error;
        }
        const tdsDateInRange = this.#calendar.querySelectorAll(`td.cal-date-in-range`);
        tdsDateInRange.forEach(td => td.classList.remove('cal-date-in-range'));
        const tdEnd = document.querySelector('.cal-end');
        if(tdEnd)
            tdEnd.classList.remove('cal-end');
        const tdStart = document.querySelector('td.cal-start');
        if(tdStart)
            tdStart.classList.remove('cal-start');
        target.classList.add('cal-start');
        this.#step = 1;
    }

    #stepOne(target) {
        let tmpDate;
        try {
            tmpDate = new Date(target.dataset.date);
            if(tmpDate >= this.#start)
                this.#end = tmpDate;
            else {
                this.#stepZero(target);
                return;
            }
        } catch (error) {
            console.error("Date invalide");
            alert("Date invalide.");
            throw error;
        }
        document.querySelectorAll('.cal-date-in-range').forEach(td => td.classList.remove('cal-date-in-range'));
        const tdEnd = document.querySelector('td.cal-end');
        if(tdEnd)
            tdEnd.classList.remove('cal-end');
        target.classList.add('cal-end');
        this.#step = 0;
        const tdsDate = this.#calendar.querySelectorAll(`td.cal-date`);
        const tdsDateInRange = Array.from(tdsDate).filter(td => {
            let tmpDateBis;
            try {
                tmpDateBis = new Date(td.dataset.date);
            } catch (error) {
                alert("Date invalide");
                console.error("Date invalide");
                throw error;
            }
            return this.#start <= tmpDateBis && tmpDateBis <= this.#end;
        });
        tdsDateInRange.forEach(td => td.classList.add('cal-date-in-range'));
        this.#target.value = `${DateRangePicker.#formatDate(this.#start)} - ${DateRangePicker.#formatDate(this.#end)}`;
        this.#calendar.setAttribute('class', 'cal-container cal-hide');
        if(this.#callback && this.#args)
            this.#callbackReturn = this.#callback.apply(null, [this.#start, this.#end, ...this.#args]);
    }

    #handleClickDate(target) {
        if(this.#step === 0){
            this.#stepZero(target);
        } else if(this.#step === 1) {
            this.#stepOne(target);
        }
    }
}