// import Categories from '../components/Categories.vue'
import Posts from '../components/posts/AllPosts.vue'
import Post from '../components/posts/Posts.vue'
import ViewPost from '../components/posts/ViewPost.vue'


export default [{
        path: '/category/:id',
        name: 'get-post',
        component: Post
    },
    {
        path: '/posts/:id',
        name: 'single-post',
        component: ViewPost
    },
    {
        path: '/posts',
        name: 'all-posts',
        component: Posts
    }
]