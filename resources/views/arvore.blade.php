@extends('layouts.app')

@section('content')

    <script type="application/javascript">
        var arvore = <?php echo $arvore; ?>;
        // console.log(arvore);        
    </script>    


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>my-family-chart</title>
</head>
<body>
  <div id="FamilyChart" class="f3"></div>
  <script type="module">
    
    const store = f3.createStore({
        data: arvore,
        node_separation: 400,
        level_separation: 150
      }),
      view = f3.d3AnimationView({
        store,
        cont: document.querySelector("#FamilyChart")
      }),
      Card = f3.elements.Card({
        store,
        svg: view.svg,
        card_dim: {w:350,h:70,text_x:15,text_y:15,img_w:0,img_h:0,img_x:0,img_y:0},
        card_display: [d => `${d.data['first name'] || ''} ${d.data['last name'] || ''}`,d => `${d.data['birthday'] || ''}`],
        mini_tree: true,
        link_break: false
      })
  
    view.setCard(Card)
    store.setOnUpdate(props => view.update(props || {}))
    store.update.tree({initial: true})
    
  
  </script>

  <x-modal-familiar id="modal-lg" title="Modal LG" size="lg"/>

</body>
</html>



@endsection