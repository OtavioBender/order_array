	
<?php 

//função de ordenação
 public function orderByArray($data, $field, $sort = 'ASC')
    {
        usort(
            $data,
             function($a, $b) use ($field) {
              return strnatcmp($a[$field], $b[$field]);
             }
        );
        if ($sort == 'ASC') {
            return $data;
        }
        return array_reverse($data);
    }

    public function index()
    {

      $array = [
        '2',
        '1',
      ];
      $revendas[$key]['FAIXA'] = $array;
      // chamada da função de ordenação passando parametros
      $this->data['revendas'] = $this->orderByArray($revendas, 'FAIXA', 'ASC'); // SE FOR DECRESENTE SUBSTITUIR ASC POR DESC
      echo json_encode($this->data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

    }

    ?>