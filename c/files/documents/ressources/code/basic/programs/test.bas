2 PRINT TAB(34);"LIFE"
4 PRINT TAB(15);"CREATIVE COMPUTING  MORRISTOWN, NEW JERSEY"
6 PRINT: PRINT: PRINT
8 PRINT "ENTER YOUR PATTERN:"
9 X1=1: Y1=1: X2=24: Y2=70
10 DIM A(24,70),B$(24)
20 C=1
30 INPUT B$(C)
40 IF B$(C)="DONE" THEN B$(C)="": GOTO 80
50 IF LEFT$(B$(C),1)="." THEN B$(C)=" "+RIGHT$(B$(C),LEN(B$(C))-1)
60 C=C+1
70 GOTO 30
80 C=C-1: L=0
90 FOR X=1 TO C-1
100 IF LEN(B$(X))>L THEN L=LEN(B$(X))
110 NEXT X
120 X1=11-C/2
130 Y1=33-L/2
140 FOR X=1 TO C
150 FOR Y=1 TO LEN(B$(X))
160 IF MID$(B$(X),Y,1)<>" " THEN A(X1+X,Y1+Y)=1:P=P+1
170 NEXT Y
180 NEXT X
200 PRINT:PRINT:PRINT
210 PRINT "GENERATION:";G,"POPULATION:";P;: IF I9 THEN PRINT "INVALID!";
215 X3=24:Y3=70:X4=1: Y4=1: P=0
220 G=G+1
225 FOR X=1 TO X1-1: PRINT: NEXT X
230 FOR X=X1 TO X2
240 PRINT
250 FOR Y=Y1 TO Y2
261 PRINT A(X,Y);" ";
270 NEXT Y
290 NEXT X
295 FOR X=X2+1 TO 24: PRINT: NEXT X
299 X1=X3: X2=X4: Y1=Y3: Y2=Y4
301 IF X1<3 THEN X1=3:I9=-1
303 IF X2>22 THEN X2=22:I9=-1
305 IF Y1<3 THEN Y1=3:I9=-1
307 IF Y2>68 THEN Y2=68:I9=-1
309 P=0
500 FOR X=X1-1 TO X2+1
510 FOR Y=Y1-1 TO Y2+1
520 C=0
530 FOR I=X-1 TO X+1
540 FOR J=Y-1 TO Y+1
550 IF A(I,J)=1 OR A(I,J)=2 THEN C=C+1
560 NEXT J
570 NEXT I
580 IF A(X,Y)=0 THEN 610
590 IF C<3 OR C>4 THEN A(X,Y)=2: GOTO 600
595 P=P+1
600 GOTO 620
610 IF C=3 THEN A(X,Y)=3:P=P+1
620 NEXT Y
630 NEXT X
635 X1=X1-1:Y1=Y1-1:X2=X2+1:Y2=Y2+1
637 INPUT "PRESS RETURN TO CONTINUE";A12
640 GOTO 210
650 END