<fieldset class="mb-3" data-async="">
    <div class="bg-white rounded shadow-sm p-4 py-4 d-flex flex-column">
        <div class="row form-group align-items-baseline">
            <div class="col-12 col-md form-group mb-md-0">
                <div class="form-group">
                    <label for="" class="form-label" id="">Доп. Текст</label>
                    <table id="add_text-table" cellpadding="5px 0 ">
                        <thead>
                            <tr>
                                <td>Доп. Текст</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!is_null($portfolio))
                                @for($i = 0; $i < 2; $i++)
                                    @php $value = array_key_exists($i, $portfolio->additional_text) ? $portfolio->additional_text[$i] : '' @endphp
                                    <tr>
                                        <td>
                                            <input type="text" name="portfolio[additional_text][]" value="{{$value}}">
                                        </td>
                                    </tr>
                                @endfor
                            @else
                                @for($i = 0; $i < 2; $i++)
                                    <tr>
                                        <td>
                                            <input type="text" name="portfolio[additional_text][]">
                                        </td>
                                    </tr>
                                @endfor
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<br>
<br>
