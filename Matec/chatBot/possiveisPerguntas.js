export function showAnswer(index) {
  switch (index) {
    case 0:
      return "Um pH alto na água pode ser corrigido ajustando-o para um nível mais neutro, geralmente entre 6,5 e 8,5, usando produtos como ácido cítrico, ácido ascórbico ou bicarbonato de sódio. Recomenda-se testar o pH da água regularmente para garantir que esteja dentro da faixa adequada para consumo.";
    case 1:
      return "O gosto de ferrugem geralmente indica a presença de ferro na água. Isso pode ser resolvido instalando um sistema de filtração de água que seja eficaz na remoção de ferro, como um filtro de óxido de ferro ou um filtro de mangânese verde. Um pré-tratamento, como a oxidação do ferro, também pode ser necessário em alguns casos.";
    case 2:
      return "Um cheiro estranho na água pode ser causado por várias razões, incluindo a presença de sulfeto de hidrogênio (cheiro de ovo podre) ou contaminação por compostos orgânicos. Um teste de qualidade da água pode identificar a causa específica, permitindo a implementação de medidas corretivas apropriadas.";
    case 3:
      return "Problemas de pressão de água podem ser causados por vários fatores, como vazamentos na linha de água, obstruções nas tubulações ou problemas com o sistema de bombeamento. Verificar vazamentos, limpar ou substituir filtros e inspecionar a bomba d'água são etapas iniciais para diagnosticar e resolver o problema.";
    case 4:
      return "Uma cor escura na água pode ser indicativa de sedimentos, minerais dissolvidos ou até mesmo contaminantes orgânicos ou inorgânicos. Um teste de qualidade da água pode ajudar a identificar a causa exata, permitindo a implementação de medidas corretivas apropriadas, como a instalação de um filtro de água adequado.";
    case 5:
      return "Sinais de contaminação bacteriana na água incluem odor desagradável, gosto estranho, mudanças na cor da água e a presença de partículas visíveis. Um teste de água específico para bactérias pode confirmar a presença delas, e a desinfecção da água usando cloro ou outros métodos adequados pode ser necessária para eliminar a contaminação.";
    case 6:
      return "Para eliminar o gosto de cloro da água da torneira, você pode usar um filtro de carvão ativado, que absorve o cloro e outros compostos orgânicos, ou deixar a água em um recipiente aberto por algumas horas para permitir que o cloro evapore naturalmente.";
    case 7:
      return "Para testar a presença de chumbo na água, você pode usar kits de teste específicos para chumbo disponíveis em lojas de ferragens ou solicitar um teste de qualidade da água em um laboratório certificado. Esses testes podem detectar até mesmo pequenas quantidades de chumbo na água.";
    case 8:
      return "Existem vários métodos eficazes para filtrar água em casa, incluindo sistemas de osmose reversa, que removem uma ampla gama de contaminantes, filtros de carvão ativado, que eliminam sabores e odores indesejados, filtros de cerâmica, que retêm bactérias e partículas, e filtros de gravidade, que são simples de usar e podem ser eficazes na remoção de sedimentos e contaminantes. A escolha do método depende das necessidades específicas de filtragem e da qualidade da água local";
    default:
      return "Não entendi a sua pergunta, por favor reformule a sua pergunta ou entre em contato com a empresa";
  }
}

export function mostProbablyQuestion() {
  let matches = [
    phAlto.matched,
    gostoFerrugem.matched,
    cheiroEstranho.matched,
    pressaoBaixa.matched,
    corEscura.matched,
    bacterias.matched,
    gostoCloro.matched,
    testeChumbo.matched,
    filtragem.matched,
    papoFurado.matched,
  ];

  return showAnswer(matches.indexOf(Math.max(...matches)));
}
