Taxonomy exercise 
====

It should take approximately 3 hours to finish this task. Please let us know whether this is possible or if you need more time.

This is a task for showing OOP & API skills in Laravel. 

If you don't have time to finish the task, please leave comments describing what you wanted to have implemented.

# Exercise 

We in Stepfront, need to model how our company is structured so we can help our new employees have a better overview of our 
company structure.

We have our root node (only one, in our case the CEO) and several child nodes.
Each of these nodes may have its own children.

It can be structured as something like this:
```
        root
       /    \
      a      b
      |
      c
    / 	\
   d     e
```

## We need 3 endpoints that will serve basic operations :

0. Add a new node to the tree.
1. Get all child nodes of a given node from the tree. (Just 1 layer of children)
2. Change the parent node of a given node.

Each node should have the following data: 

0. Node identifier.
1. node name.
2. who is the parent node.
3. The height of the node. (in the example above `height(root)=0` and `height(a)=1`)
4. Managers should have an extra field specifying the name of the department they are managing.
5. Developers should have an extra field specifying the name of the programming language they are strongest in.

Please upload your solution to a git repository (BitBucket, GitLab or GitHub) and provide a README.md file with 
documentation.

Feel free to describe, what you would have improved in your solution if more time was given?