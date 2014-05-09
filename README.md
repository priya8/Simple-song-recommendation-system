Simple-song-recommendation-system
=================================
Recommender systems or recommendation systems are a subclass of information filtering system that seek to predict the 'rating' or 'preference' or ‘liking’ that user would give to an item.Basically what we are trying to do is embracing elephant in a room i.e filtering big data and obtaining useful stuffs.
We give the user a set of songs chosen randomly from database and then he/she .chooses songs they like and this is given as input to Naive-bayes Classifier algorithm and then the output obtained i.e person’s nature is analyzed, which artist does he/she like, which genre is he/she more inclined to or which era song does he/she like more is determined. This output is given as input to Apriori algorithm which filters all those data results below the threshold and provides user with songs which he/she may like.

Naive-bayes Algorithm
======================
 

A naive Bayes classifier is a simple probabilistic classifier based on applying Bayes' theorem with strong (naive) independence assumptions. A more descriptive term for the underlying probability model would be "independent feature mode.In simple terms, a naive Bayes classifier assumes that the value of a particular feature is unrelated to the presence or absence of any other feature, given the class variable. For example, a fruit may be considered to be an apple if it is red, round, and about 3" in diameter. A naive Bayes classifier considers each of these features to contribute independently to the probability that this fruit is an apple, regardless of the presence or absence of the other features.



The Bayes Naive classiﬁer selects the most likely classiﬁcation P(ai|vj) given the attribute values a1, a2, . . . an.



                                         P(ai|vj) = (nc + mp)/(n + m) 
  


                                    
 where,
                                                   n=Number of cases where v=vj.
                                                   nc=Number of cases where v=vj and a=ai.
                                                   m=Equivalent sample size.
                                                   p= A priori estimate for P(ai|vj).

Apriori Algorithm
=================



Aprioris an algorithm for frequent itemset mining and association rule learning over transactional databases. It proceeds by identifying the frequent individual items in the database and extending them to larger and larger item sets as long as those itemsets appear sufficiently often in the database. The frequent item sets determined by Apriori can be used to determine association rules which highlight general trends in the database: this has applications in domains such as market basket analysis.Find frequent itemsets using an iterative level-wise approach based on candidate generation.Apriori uses a "bottom up" approach, where frequent subsets are extended one item at a time , and groups of candidates are tested against the data. The algorithm terminates when no further successful extensions are found


Input:
  D, a database of transactions.
  min_sup, the minimum support count threshold.

Output:
  L, frequent itemsets in D.


This algorithm has two steps,
1. Find all the data result sets which has threshold support.
2. Use the frequent itemset to generate rules(If needed)



Lets consider a case where in the output of naive-Bayes classifier algorithm are,
  P(Shreya Goshal)= 0.4
  P(Sonu Nigam)   = 0.3
  P(Sunidhi)      = 0.2
  P(KK)           = 0.0
  P(MJ)           = 0.1
  

If we chose min_sup as 0.2, then we can filter out  KK and MJ.


