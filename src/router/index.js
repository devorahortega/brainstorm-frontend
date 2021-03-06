import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import CardsIndex from "../views/CardsIndex.vue";
import IdeasIndex from "../views/IdeasIndex.vue";
import Signup from "../views/Signup.vue";
import Login from "../views/Login.vue";
import Logout from "../views/Logout.vue";
import CreateCard from "../views/CreateCard.vue";
import Contact from "../views/Contact.vue";

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
  { path: "/signup", name: "signup", component: Signup },
  { path: "/login", name: "login", component: Login },
  { path: "/logout", name: "logout", component: Logout },
  { path: "/create", name: "create-card", component: CreateCard },
  { path: "/contact", name: "contact", component: Contact },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
