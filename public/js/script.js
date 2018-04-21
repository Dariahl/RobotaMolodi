function initMultiselect(container) {
    $(container).multiselect(
        {
            buttonWidth: '100%'
            , maxHeight: 200
            , enableFiltering: true
            , enableCaseInsensitiveFiltering: true
            , filterPlaceholder: 'Пошук...'
            //,nSelectedText: '-Три і більше'
            , includeSelectAllOption: true
            , enableFullValueFiltering: true
            , selectAllText: 'Вибрати все'
            , buttonText: function (options, select) {
                $('#list-selected-region').find('.multiselect-clear-filter').on('click', function () {
                    $('#list-selected-region > div.col-xs-12.wrapper-list-select-box > select').multiselect('deselectAll', false);
                    $('#list-selected-region > div.col-xs-12.wrapper-list-select-box > div > button > span').text('...');
                });
                $('#list-selected-indastry').find('.multiselect-clear-filter').on('click', function () {
                    $('#list-selected-indastry > div.col-xs-12.wrapper-list-select-box > select').multiselect('deselectAll', false);
                    $('#list-selected-indastry > div.col-xs-12.wrapper-list-select-box > div > button > span').text('...');
                });
                $('#list-selected-specialization').find('.multiselect-clear-filter').on('click', function () {
                    $('#list-selected-specialization > div.col-xs-12.wrapper-list-select-box > select').multiselect('deselectAll', false);
                    $('#list-selected-specialization > div.col-xs-12.wrapper-list-select-box > div > button > span').text('...');
                });

                if (options.length === 0) {
                    return '...';
                }

                else if (options.length > 3) {
                    return 'Вибрано більше трьох';
                }
                else {
                    var labels = [];
                    options.each(function () {
                        if ($(this).attr('label') !== undefined) {
                            labels.push($(this).attr('label'));
                        }
                        else {
                            labels.push($(this).html());
                        }
                    });

                    var maxCountCharacters = 0;
                    if ($(select).attr('name') == 'selected-region') {
                        maxCountCharacters = 18;
                    } else {
                        maxCountCharacters = 55;
                    }

                    if (labels.length == 1) {
                        var strLabel = labels.join(', ') + '';
                        return strLabel.length >= maxCountCharacters ? strLabel.slice(0, maxCountCharacters) + "."
                            : strLabel;
                    } else if (labels.length == 2) {
                        if ((labels.join(', ') + '').length >= maxCountCharacters) {
                            return labels[0].slice(0, maxCountCharacters / 2 - 1) + '., ' + labels[1].slice(0, maxCountCharacters / 2 - 1) + '.';
                        } else {
                            return labels.join(', ') + '';
                        }
                    } else {
                        if ((labels.join(', ') + '').length >= 18) {
                            return labels[0].slice(0, maxCountCharacters / 3 - 2) + '., ' + labels[1].slice(0, maxCountCharacters / 3 - 2) + '., ' +
                                labels[2].slice(0, maxCountCharacters / 3 - 2) + '.';
                        } else {
                            return labels.join(', ') + '';
                        }
                    }
                }
            }
        });
}
