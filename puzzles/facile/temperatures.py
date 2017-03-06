import sys
import math

# Python 2.7
# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

n = int(raw_input())  # the number of temperatures to analyse
temps = raw_input().split(' ')  # the n temperatures expressed as integers ranging from -273 to 5526

# Write an action using print
# To debug:
tmp = 10000000000
print >> sys.stderr, temps
if temps[0] == '':
    tmp = 0

for t in temps:
    if t != '':
        t = long(t)
        if abs(t) == abs(tmp) and t > tmp:
            tmp = t
        elif abs(t) < abs(tmp):
            tmp = t


print tmp

#  Temperatures
#
# Dans cet exercice, vous devez analyser un releve de temperatures pour trouver quelle temperature se rapproche le plus de zero.
#
#
# Exemple de temperatures
# Ici, -1 est le plus proche de 0.
#  	Regles
#
# Ecrivez un programme qui affiche la temperature la plus proche de 0 parmi les donnees d'entree. Si deux nombres sont aussi proches de zero, alors l'entier positif sera considere comme etant le plus proche de zero (par exemple, si les temperatures sont -5 et 5, alors afficher 5).
#  	Entrees du jeu
#
# Votre programme doit lire les donnees depuis l'entree standard et ecrire le resultat sur la sortie standard.
# Entree
# Ligne 1 : Le nombre N de temperatures a analyser.
#
# Ligne 2 : Une chaine de caracteres contenant les N temperatures exprimees sous la forme de nombres entiers allant de -273 a 5526
#
# Sortie
# Affichez 0 (zero) si aucune temperature n'est fournie. Sinon, affichez la temperature la plus proche de 0

