<fieldset class="mb-3" data-async="">
    <div class="bg-white rounded shadow-sm p-4 py-4 d-flex flex-column">
        <div class="row form-group align-items-baseline">
            <div class="col-12 col-md form-group mb-md-0">
                <div class="form-group">
                    <label for="" class="form-label" id="">Характеристики</label>
                    <table id="chars-table" cellpadding="5px 0 ">
                        <thead>
                            <tr>
                                <td>Характеристики</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!is_null($portfolio))
                                @foreach($portfolio->chars as $char)
                                    <tr>
                                        <td>
                                            <input type="text" name="portfolio[chars][]" value="{{$char}}">
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td>
                                    <input type="text" name="portfolio[chars][]">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="javascript:void(0)" id="add-btn">Добавить еще</a>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<script>
    let btn = document.querySelector('#add-btn')
    let table = document.querySelector('#chars-table tbody')

    btn.addEventListener('click', () => {
        let tr = document.createElement('tr')
        let td = document.createElement('td')
        let input = document.createElement('input')
        input.name = 'portfolio[chars][]'
        input.type = 'text'
        td.append(input)
        tr.append(td)

        table.appendChild(tr)
    })
</script>
<br>
<br>
