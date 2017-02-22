@section('main-menu')
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">Главная страница</li>
            <li class="treeview active">
                <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Одиночные виджеты</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/string">Строка</a></li>
                    <li><a href="/adm/text">Текст</a></li>
                    <li><a href="/adm/textarea">Редактор текста</a></li>
                    <li><a href="/adm/float">Дробное число</a></li>
                    <li><a href="/adm/int">Целое число</a></li>
                    <li><a href="/adm/bool">Логическое</a></li>
                    <li><a href="/adm/image">Картинка</a></li>
                    <li><a href="/adm/link">ССылка</a></li>
                    <li><a href="/adm/file">Файлы</a></li>
                </ul>
            </li>

            <li class="treeview active">
                <a href="#"><i class="fa fa-object-ungroup"></i> <span>Групповые виджеты</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/table">Таблица</a></li>
                    <li><a href="/adm/groupflat">Плоская группа</a></li>
                </ul>
            </li>
            <li class="treeview active">
                <a href="#"><i class="fa fa-image"></i> <span>Мультизагрузка</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/multi-block">Мультизагрузка в блок</a></li>
                    <li><a href="/adm/multi-group">Мультизагрузка в группу</a></li>
                </ul>
            </li>


            {{--<li>--}}
                {{--<a href="reg">--}}
                    {{--<i class="fa fa-link"></i> <span>Регистрация</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}

            {{--</li>--}}
        </ul>
    </section>

@endsection