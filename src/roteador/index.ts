import { createRouter, createWebHashHistory, RouteRecordRaw } from "vue-router";
import FormularioProjeto from "@/views/Projetos/FormularioProjeto.vue";
import projetosTracker from "@/views/ProjetosTracker.vue";
import ListaProjetos from "@/views/Projetos/ListaProjetos.vue";
import Home from "@/views/Home.vue";

const rotas: RouteRecordRaw[] = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/projetos",
    component: projetosTracker,
    children: [
      {
        path: "",
        name: "Projetos",
        component: ListaProjetos,
      },
      {
        path: "create",
        name: "Novo projeto",
        component: FormularioProjeto,
      },
      {
        path: ":id",
        name: "Editar projeto",
        component: FormularioProjeto,
        props: true,
      },
    ],
  },
];

const roteador = createRouter({
  history: createWebHashHistory(),
  routes: rotas,
});

export default roteador;
