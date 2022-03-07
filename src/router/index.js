import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import CardsIndex from "../views/CardsIndex.vue";
import IdeasIndex from "../views/IdeasIndex.vue";
import Signup from "../views/Signup.vue";
import Logout from "../views/Logout.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/about",
    name: "About",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ "../views/About.vue"),
  },
  { path: "/cards", name: "cards-index", component: CardsIndex },
  { path: "/ideas", name: "ideas-index", component: IdeasIndex },
  { path: "/users", name: "signup", component: Signup },
  { path: "/sessions", name: "logout", component: Logout },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
